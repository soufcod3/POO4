# POO4: Exceptions

### What I've learned:

* To throw an exception: ```throw()```

* ```throw()``` stops the code

* Displaying an exception's error message:
```
try {
    echo division(5) . "\n";
    echo division(0) . "\n";
} catch(Exception $e){
    echo "Exception received  : ". $e->getMessage() . "n";
}
```