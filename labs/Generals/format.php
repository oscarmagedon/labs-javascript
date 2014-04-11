<style>
#clicker{
    padding: 2px;
    color: #009;
}
#show-text{
    padding: 5px;
    color: #000;
}
</style>
<div style="width: 80%">
    <h2 class="first-title">Our General Format</h2>

    <!-- GIST CODE INCLUSION -->
    <div class="gist-code">
        <script src="https://gist.github.com/oscarmagedon/7756b1c140d9e674f711.js"></script>
    </div>

    <p class="text-wrapper">
        <button id="clicker" onclick="clickIt()">Click me.</button>
        <span id="show-text">My text.</span>
    </p>
</div>
<script>
    function clickIt () {
        document.getElementById("show-text").innerHTML = "Text changed!";
    }
</script>
