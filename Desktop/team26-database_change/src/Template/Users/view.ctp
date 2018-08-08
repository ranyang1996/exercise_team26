<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
.btn-group button {
    background-color: #FF8C00;
    border: 1px solid #FF8C00;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
    float: left;
}
.btn-group:after {
    content: "";
    clear: both;
    display: table;

    }

.btn-group button:not(:last-child) {
    border-right: none;
}

.btn-group button:hover {
    background-color: #A0522D;
}


table {
    width:75%;
    height:10%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}

table#t01 th {
    background-color: #FF8C00;
    color: white;
}

.row {
    display: flex;
    flex-direction: row;
}

.column {
    flex: 1;
    padding: 1px;
}
.textcolor{
        color: #FF8C00;
    }
</style>
<head><br><br><br><br><br>
<div class="btn-group" style="width:100%" >
  <button style="width:16.66%"><big><big>Home</big></big></button>
  <button style="width:16.67%"><big><big>My Enrolments</big></big></button>
  <button style="width:16.66%"><big><big>My Sessions</big></big></button>
  <button><big><big><?= $this->Html->link('My Resources', ['controller' => 'users', 'action' => 'myresources']); ?></big></big></button>
      <button style="width:16.67%"><big><big>FAQs & Support</big></big></button>
  &ensp;<big><big>  <span class="glyphicon glyphicon-log-out"></span>
    <button><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></button></big></big>


</div>
</head>

<Body>
<div class = "row" positon="fixed">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<div class = "column">
<br><big><h1>Welcome</h1></big>
<h2>Mindfulness 4 Life</h2>
<img src="../img/hpi.png" height="200" width="200"><br>
<h3><?= h($user->given_name) ?></h3>
<h3><?= $this->Text->autoParagraph('0'.$user->mobile) ?></h3>
<h3><?= h($user->email) ?></h3>
&emsp;&emsp;&emsp;&emsp;<big><big><a href="https://www.google.com">Edit</a></big></big>
    </div>

<div class = "column">
    <div style = "overflow-y: scroll; width: 90%; height: 75%; overflow-x: hidden;">
    <table id="t01">
        <h2 class="textcolor">Mon 16 Apr 2018</h2>
  <tr>
    <th><big>1:00pm - 3:00 pm</big></th>
  </tr>
  <tr>
      <td><h3>Class Name:<br>Teacher Name:<br>Class Location:<br>Teacher Tel:</h3></td>
  </tr>

</table>
    <table id="t01">
        <h2 class="textcolor">Mon 16 Apr 2018</h2>
  <tr>
    <th><big>1:00pm - 3:00 pm</big></th>
  </tr>
  <tr>
      <td><h3>Class Name:<br>Teacher Name:<br>Class Location:<br>Teacher Tel:</h3></td>
  </tr>

</table>
        <table id="t01">
        <h2 class="textcolor">Mon 16 Apr 2018</h2>
  <tr>
    <th><big>1:00pm - 3:00 pm</big></th>
  </tr>
  <tr>
      <td><h3>Class Name:<br>Teacher Name:<br>Class Location:<br>Teacher Tel:</h3></td>
  </tr>

</table>

    </div>
</div>
    </div>
</Body>
</html>