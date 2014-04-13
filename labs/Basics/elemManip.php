<style>
    #myspan {
        color: #055;
        padding-left: 15px;
    }
    .mybutton{
        margin: 8px;
        padding: 4px;
        text-transform: uppercase;
    }
    #second {
        border: 1px solid blue;
        color: #055;
        padding: 3px;
        margin: 2px;
    }
</style>
<div style="width: 80%">
    <h2 class="first-title">I - Basic Manipulation of elements</h2>

    <!-- +++++ FIRST EXAMPLE ++++ -->

    <h3 class="second-title">1.- Change an element text</h3>

    <p class="text-wrapper">
        The next span doesn't have any text, the message "Hello World" is set on the
        Javascript language to be put on the element.
    </p>

    <span id="myspan"></span>

    <hr />

    <!-- +++++ SECOND EXAMPLE ++++ -->

    <h3 class="second-title">2.- One element to another</h3>

    <p class="text-wrapper">
        We can modify the content of an element by clicking another one on the document.
        <br />
        <button class="mybutton" onclick="document.getElementById('second').innerHTML = 'Message Changed!'">Click me</button>
        <br />
        <span id="second">Original Message</span>
    </p>

    <hr />

    <!-- +++++ THIRD EXAMPLE ++++ -->

    <h3 class="second-title">3.- Changing HTML Styles</h3>

    <p class="text-wrapper">
        We can modify the CSS properties too.
        <br />
        <button class="mybutton" onclick="document.getElementById('coloured').style.color = '#900'">Put it red</button>
        <br />
        <span id="coloured">Black Letters</span>
    </p>

</div>
<script>
    document.getElementById("myspan").innerHTML = "Hello World";
</script>