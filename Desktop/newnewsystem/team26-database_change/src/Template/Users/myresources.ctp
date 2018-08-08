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
<br><br>

<div>
    <?php foreach ($user->files as $file): ?>
                <tr>
                    <td><?= h($file->file) ?></td>
                    <td><?= $this->Html->link('View', 'files/files/file/'.$file->file); ?></td>
                </tr>
                <br>
     <?php endforeach; ?>
</div>
</body>
</html>