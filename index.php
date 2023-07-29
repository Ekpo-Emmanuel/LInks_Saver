<?php 

require "config.php";
// require "./components/banimate.php";


$tableName = 'urls';
if(isset($_POST["submit"])) {
    $name = trim($_POST["name"]);
    $urlname = trim($_POST["url"]);

    $nameError = "";
    $urlError = "";

    if (!filter_var($urlname, FILTER_VALIDATE_URL)) {
        $urlError = "Enter valid URL";
    } 
    if (empty($name)) {
        $nameError = "Enter a name";
    } 

    if(empty($urlError) AND empty($nameError)) {
            $insert = $conn->prepare("INSERT INTO $tableName (url, name) VALUES (:url, :name)");
            $insert->execute([
                ':name' => $name,
                ':url' => $urlname,
            ]);
        // header("location: index.php");
    }
}



$select = $conn->query("SELECT * FROM $tableName");
$select->execute();

$rows = $select->fetchAll(PDO::FETCH_OBJ);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links Saver</title>
    <link rel="stylesheet" href="./components/style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class='input-container'>
        <h1>Links Saver</h1>
        <form action="index.php" method="POST">
            <div class="name">
                <span style="color: orange; font-size: 10px; margin-bottom: 5px;font-family: 'Montserrat Alternates', sans-serif;"><?php if(isset($nameError)) { echo $nameError; }?></span>
                <input type="text" placeholder='Name'  name="name"/>
            </div>
            <div class="name">
                <span style="color: orange; font-size: 10px; margin-bottom: 5px;font-family: 'Montserrat Alternates', sans-serif;"><?php if(isset($urlError)) { echo $urlError; }?></span>
                <input type="text" placeholder='Paste a link'  name="url" value="<?php if(isset($_POST["url"])) {echo $_POST["url"];} ?>"/>
            </div>
            <input type="submit" value="Add Link" name="submit">
        </form>
        


    <?php
        $query = "SELECT * FROM $tableName LIMIT 1";
        $result = $conn->query($query);

        if ($result->rowCount() > 0) { ?>            
        <table id="sampleTableA">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">URL</th>
                    <th scope="col">Links</th>
                    <th scope="col">Clicks</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $row) : ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <th scope="row"><?php echo $row->name ;?></th>
                    <th scope="row"><?php echo $row->url ;?></th>
                    <td><a href="http://localhost/projects/project1/URL_SHORT/u?id=<?php echo $row->id; ?>" target="_blank">http://localhost/short-<?php echo $row->id; ?></a></td>
                    <td><?php echo $row->clicks; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php }?>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>

    <script src="./configs/fancyTable.js"></script>
    <script type="text/javascript">
			// Word genarator
			function rWord(r){var t,n="bcdfghjklmnpqrstvwxyz",a="aeiou",e=function(r){return Math.floor(Math.random()*r)},o="";r=parseInt(r,10),n=n.split(""),a=a.split("");for(t=0;t<r/2;t++){var l=n[e(n.length)],p=a[e(a.length)];o+=0===t?l.toUpperCase():l,o+=2*t<r-1?p:""}return o}

			$(document).ready(function() {
				// Generate a big table
				for(var n=0;n<10;n++){
					var row = $("<tr>");
					$("#sampleTableA").find("thead th").each(function() {
						$("<td>",{
							html: rWord(8),
						});
					});
					row.appendTo($("#sampleTableA").find("tbody"));
				}
								
				// And make them fancy
				var fancyTableA = $("#sampleTableA").fancyTable({
					sortColumn:0,
					pagination: true,
                    paginationClass:"btn btn-light",
                    paginationClassActive:"active",
					perPage:5,
					globalSearch:true,
					inputStyle:" padding: 10px 10px; font-size: 12px; box-sizing: border-box; font-family: 'Montserrat 'sans-serif; border-radius: 5px; border: none; width: 100%;",
					inputPlaceholder:"Search...",

				});
			});
		</script>

</body>
</html>


<?php 
    require "./components/footer.php";
?>