<style>
.extra-info h3 {
    width: 300px;
    background-color: yellow;
    border-radius: 5px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}

</style>

<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
<style>
#clockdiv h3{
  color: black;
}

#clockdiv{
  font-family: sans-serif;
  color: black;
  display: inline-block;
  font-weight: 100;
  text-align: center;
  font-size: 30px;
}

#clockdiv > div{
  padding: 10px;
  border-radius: 3px;
  background: yellow;
  display: inline-block;
  margin:10px;
}

#clockdiv div > span{
  padding: 15px;
  border-radius: 3px;
  background: black;
  color: white;
  display: inline-block;
}

#clockdiv .smalltext{
  padding-top: 5px;
  font-size: 16px;
}
</style>
