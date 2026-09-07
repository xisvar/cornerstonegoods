<?php
/**
 * EmployeeDirectory class.
 * Wraps the raw $employeeDirectory array and provides the three
 * views the assignment requires: sorted by last name, sorted by
 * department, and nested by department then team. Grouping this
 * logic into a class keeps employee-directory.php focused on
 * output only, and keeps the sorting/grouping code in one place
 * instead of being duplicated for each menu option.
 */
class EmployeeDirectory {

    /** @var array The raw employee records this instance was built from. */
    private $employees;

    /**
     * @param array $employees The multidimensional employee array.
     *                         Basic error handling: an invalid or
     *                         missing array is treated as empty
     *                         rather than causing a fatal error.
     */
    public function __construct($employees) {
        $this->employees = is_array($employees) ? $employees : array();
    }

    /**
     * Returns all employees sorted by last name, ascending.
     * usort() is used because it is PHP's built-in general-purpose
     * sort (an efficient O(n log n) comparison sort) rather than
     * hand-rolling something like a bubble sort, which would be
     * both slower and more code to maintain for the same result.
     *
     * @return array
     */
    public function sortedByLastName() {
        $sorted = $this->employees;
        usort($sorted, function ($a, $b) {
            return strcasecmp($a['lastName'], $b['lastName']);
        });
        return $sorted;
    }

    /**
     * Returns all employees sorted by department, ascending, with
     * last name as a secondary sort so each department's employees
     * are still easy to scan.
     *
     * @return array
     */
    public function sortedByDepartment() {
        $sorted = $this->employees;
        usort($sorted, function ($a, $b) {
            $deptComparison = strcasecmp($a['department'], $b['department']);
            return ($deptComparison !== 0) ? $deptComparison : strcasecmp($a['lastName'], $b['lastName']);
        });
        return $sorted;
    }

    /**
     * Returns the employees grouped first by department, then by
     * team within each department, for rendering as a nested list.
     * Departments and teams are each sorted alphabetically so the
     * nested list has a predictable, readable order.
     *
     * @return array Structure: [ department => [ team => [ employees... ] ] ]
     */
    public function groupedByDepartmentAndTeam() {
        $grouped = array();

        foreach ($this->employees as $employee) {
            $department = isset($employee['department']) ? $employee['department'] : 'Unassigned';
            $team       = isset($employee['team']) ? $employee['team'] : 'Unassigned';

            if (!isset($grouped[$department])) {
                $grouped[$department] = array();
            }
            if (!isset($grouped[$department][$team])) {
                $grouped[$department][$team] = array();
            }
            $grouped[$department][$team][] = $employee;
        }

        ksort($grouped);
        foreach ($grouped as $department => $teams) {
            ksort($grouped[$department]);
        }

        return $grouped;
    }

    /**
     * @return int The number of employee records currently loaded.
     */
    public function count() {
        return count($this->employees);
    }
}
?>
