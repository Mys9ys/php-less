<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    #grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-rows: 1fr 1fr 1fr;
        /*grid-template-columns: 1fr 1fr 1fr;*/
        /*grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));*/
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        /*grid-gap: 2vw;*/
        grid-column-gap: 3vw;
        grid-row-gap: 1vw;
    }
    #grid > div {
        font-size: 5vw;
        padding: .5em;
        background: gold;
        text-align: center;
    }
</style>
<div id="grid">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
    <div>7</div>
    <div>8</div>
    <div>9</div>
</div>
</body>
</html>