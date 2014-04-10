<style>
    #myspan {
        color: #055;
        padding-left: 15px;
    }

    #mybutton{
        margin: 8px;
    }
    #second {
        border: 1px solid blue;
        color: #055;
        padding: 3px;
        margin: 2px;
    }
</style>
<div>
    <h2 class="first-title">It's easy!</h2>

    <h3 class="second-title">Change an element text</h3>

    <p class="text-wrapper">
        The next span doesn't have any text, the message "Hello World" is set on the
        Javascript language to be put on the element.
    </p>

    <span id="myspan"></span>

    <h3 class="second-title">One element to another</h3>

    <p class="text-wrapper">
        We can modify one element activating another one on the document.
    </p>

    <button id="mybutton" onclick="changeMessage()">Click me</button>
    <br />
    <span id="second">Original Message</span>

</div>
<script>
    document.getElementById("myspan").innerHTML = "Hello World";

    function changeMessage () {
        document.getElementById("second").innerHTML = "Message Changed!!";
    }
</script>