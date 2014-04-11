<style>
    #result {
        border: 1px dotted #CCC;
        padding: 5px;
        float: left;
        margin-left: 20px;
        font-weight: bold;
        font-style: italic;
    }
</style>
<div>
    <h2 class="first-title">II - Variables, arrays and others...</h2>

    <p class="text-wrapper">
        Let's the programming begin! Here we're going to see real programming functions based on JS language
        which is very similar at most important programming languages in life. Here, we're gonna use comment lines
        and math operations to have a quick advance too.
    </p>

    <h3 class="second-title">Variable?</h3>

    <p class="text-wrapper">
        Is the most important thing in programming, and JS is not the exception, is useful to do any type of
        operation in the script, and in JS is very easy to SET and GET the value of a variable. The next span
        has the result of an operation made on JS with some variables.

        <div id="result"></div>
    </p>

</div>
<script>
/*
In this block you can write any lines
you want and JS is gonna take it as a note
*/

// With this pair of slashes we can comment only one line

//To set a variable we can put the word "var" at the beginning or not
var x = 2;
    y = 3;

var result = x + y;

document.getElementById("result").innerHTML = result;

</script>