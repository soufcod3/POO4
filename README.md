# POO4: Exceptions

### Highlights:

* To throw an exception: ```json throw() ```

* ```json throw() ``` stops the code

* Displaying an exception's error message:
```json 
try {
    echo division(5) . "\n";
    echo division(0) . "\n";
} catch(Exception $e){
    echo "Exception received  : ". $e->getMessage() . "n";
}
```