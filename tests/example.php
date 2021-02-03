<?php

namespace Space;

class Foo
{
}

$p = 'string' . 'end';
// PSR12.Operators.OperatorSpacing.NoSpaceBefore PSR12.Operators.OperatorSpacing.NoSpaceAfter
$g = 'string'.'end';

new Foo();
// PSR12.Classes.ClassInstantiation.MissingParentheses
new Foo;

if (true) :
    echo '.T.';
endif
// Squiz.ControlStructures.ControlSignature.SpaceAfterCloseParenthesis
if (true):
    echo '.T.';
endif
