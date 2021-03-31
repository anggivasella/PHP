<?php
class A {
final function Foo() {
echo "A";
}
}
class B extends A {
function Foo() {
echo "B";
}
}

//final methods cannot be overridden

