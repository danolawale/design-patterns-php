<?php

namespace CompositePattern\Todo;

require_once('TodoInterface.php');
require_once('Todo.php');
require_once('TodoProject.php');


$projects = [
    new TodoProject('Creating Your Future', [
        new TodoProject('Decide What you want to do', [ new Todo('Become a PHP developer')]),
        new TodoProject('Decide how you want to go about it?', [new Todo('Get a PHP developer role first')]),
        new TodoProject('Create a Business plan', [
            new TodoProject('Work on the side for 3-5 years', [
                new Todo('create a company'),
                new Todo('start working on your business on the side'),
                new Todo('Quite job after 5 years and launch out')
            ])
        ]),
        new Todo('Enjoy life,family,friends and most of all submit to God')
    ])
];

//print_r($projects);
 
echo "\n-------------------------------------------------------------------\n";

//$dream = new TodoProject('Print Out', [new Todo('Testing first')]);

//$dream = new Todo('Testing first');

$dream = new TodoProject('Print Out', $projects);

var_dump($dream->getHtml());