<?php
/**
 * Employee directory - Module 3: Arrays assignment.
 * Loads the employee array and the EmployeeDirectory class, then
 * renders one of three views based on the ?view= query string
 * value chosen from the submenu: lastname (default), department,
 * or nested.
 */

$pageTitle       = 'Employee Directory - Cornerstone Goods';
$pageDescription = 'Cornerstone Goods employee directory, sortable by last name or department.';
$pageKeywords    = 'employee directory, staff list, Cornerstone Goods';
$currentPage     = 'arrays';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
include 'employee-directory-data.php';
include 'includes/EmployeeDirectory.php';

$directory = new EmployeeDirectory($employeeDirectory);

// Basic validation: only three view values are recognized, so an
// unexpected or missing ?view= value falls back to the default
// "lastname" view instead of showing a blank or broken page.
$validViews = array('lastname', 'department', 'nested');
$view = (isset($_GET['view']) && in_array($_GET['view'], $validViews, true)) ? $_GET['view'] : 'lastname';

/**
 * Outputs one employee record as a table row. Shared by both the
 * last-name and department views so the row markup is written once.
 */
function render_employee_row($employee) {
    ?>
    <tr>
        <td><?php echo htmlspecialchars($employee['lastName'], ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($employee['firstName'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($employee['department'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($employee['team'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($employee['title'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><a href="mailto:<?php echo htmlspecialchars($employee['email'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($employee['email'], ENT_QUOTES, 'UTF-8'); ?></a></td>
        <td><?php echo htmlspecialchars($employee['phone'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($employee['hireDate'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
    <?php
}
?>
    <main>
        <h2>Employee Directory</h2>

        <p>
            Cornerstone Goods currently has <?php echo (int) $directory->count(); ?> team
            members. Choose a view below to browse the directory sorted by last name,
            regrouped by department, or broken out into a nested list by department
            and team.
        </p>

        <ul class="submenu">
            <li<?php echo ($view === 'lastname') ? ' class="current-page"' : ''; ?>>
                <a href="employee-directory.php?view=lastname">By Last Name</a>
            </li>
            <li<?php echo ($view === 'department') ? ' class="current-page"' : ''; ?>>
                <a href="employee-directory.php?view=department">By Department</a>
            </li>
            <li<?php echo ($view === 'nested') ? ' class="current-page"' : ''; ?>>
                <a href="employee-directory.php?view=nested">Nested by Department &amp; Team</a>
            </li>
        </ul>

        <?php if ($view === 'lastname'): ?>

            <h3>Sorted by Last Name (Ascending)</h3>
            <table>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Team</th>
                    <th scope="col">Title</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Hire Date</th>
                </tr>
                <?php foreach ($directory->sortedByLastName() as $employee): ?>
                    <?php render_employee_row($employee); ?>
                <?php endforeach; ?>
            </table>

        <?php elseif ($view === 'department'): ?>

            <h3>Sorted by Department</h3>
            <table>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Team</th>
                    <th scope="col">Title</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Hire Date</th>
                </tr>
                <?php foreach ($directory->sortedByDepartment() as $employee): ?>
                    <?php render_employee_row($employee); ?>
                <?php endforeach; ?>
            </table>

        <?php elseif ($view === 'nested'): ?>

            <h3>Nested by Department &amp; Team</h3>
            <ul class="nested-directory">
                <?php foreach ($directory->groupedByDepartmentAndTeam() as $department => $teams): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?></strong>
                        <ul>
                            <?php foreach ($teams as $team => $teamEmployees): ?>
                                <li>
                                    <?php echo htmlspecialchars($team, ENT_QUOTES, 'UTF-8'); ?>
                                    <ul>
                                        <?php foreach ($teamEmployees as $employee): ?>
                                            <li>
                                                <?php echo htmlspecialchars($employee['firstName'] . ' ' . $employee['lastName'], ENT_QUOTES, 'UTF-8'); ?>
                                                &mdash; <?php echo htmlspecialchars($employee['title'], ENT_QUOTES, 'UTF-8'); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
    </main>
<?php
include 'includes/footer.php';
?>
