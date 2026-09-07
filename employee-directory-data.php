<?php
/**
 * Employee directory data.
 * A multidimensional array of employee contact records used by
 * employee-directory.php. Kept at the project root alongside
 * variables.php and poll-data.php since this is content data,
 * not layout.
 *
 * Each record has: firstName, lastName, department, team, email,
 * phone, title, and hireDate (the two additional fields chosen
 * for this assignment). firstName/lastName are stored separately
 * (rather than one combined "name" field) specifically so sorting
 * by last name doesn't require parsing a full name string apart.
 *
 * IMPORTANT: Replace the "[Your Name]" record below with your own
 * name, title, and contact details before submitting - the
 * assignment requires you to include yourself as one of the
 * employees, and that isn't something that can be filled in for you.
 */

$employeeDirectory = array(
    array(
        'firstName' => 'Grace',
        'lastName'  => 'Whitfield',
        'department'=> 'Executive Leadership',
        'team'      => 'Founders Office',
        'email'     => 'grace@cornerstonegoods.example',
        'phone'     => '(555) 010-2001',
        'title'     => 'Founder & CEO',
        'hireDate'  => '2021-03-01',
    ),
    array(
        'firstName' => '[Your First Name]',
        'lastName'  => '[Your Last Name]',
        'department'=> 'Executive Leadership',
        'team'      => 'Finance',
        'email'     => 'you@cornerstonegoods.example',
        'phone'     => '(555) 010-2002',
        'title'     => 'Web Developer',
        'hireDate'  => '2026-01-15',
    ),
    array(
        'firstName' => 'Daniel',
        'lastName'  => 'Okafor',
        'department'=> 'Operations',
        'team'      => 'Fulfillment',
        'email'     => 'daniel@cornerstonegoods.example',
        'phone'     => '(555) 010-2003',
        'title'     => 'Operations Manager',
        'hireDate'  => '2022-06-10',
    ),
    array(
        'firstName' => 'Maria',
        'lastName'  => 'Delgado',
        'department'=> 'Operations',
        'team'      => 'Customer Care',
        'email'     => 'maria@cornerstonegoods.example',
        'phone'     => '(555) 010-2004',
        'title'     => 'Customer Care Lead',
        'hireDate'  => '2022-09-01',
    ),
    array(
        'firstName' => 'Michael',
        'lastName'  => 'Chen',
        'department'=> 'Marketing & Sales',
        'team'      => 'Digital Marketing',
        'email'     => 'michael@cornerstonegoods.example',
        'phone'     => '(555) 010-2005',
        'title'     => 'Marketing Coordinator',
        'hireDate'  => '2023-02-20',
    ),
    array(
        'firstName' => 'Sofia',
        'lastName'  => 'Reyes',
        'department'=> 'Marketing & Sales',
        'team'      => 'Sales',
        'email'     => 'sofia@cornerstonegoods.example',
        'phone'     => '(555) 010-2006',
        'title'     => 'Sales Associate',
        'hireDate'  => '2023-08-05',
    ),
);
?>
