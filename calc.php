<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calculator Online</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css"> 
 </head>
  <body>
<div class="masthead-followup row m-0 border border-white">
<div class="col-12 col-md-12 p-3 p-md-5 bg-white border border-white"><h3 class="text-center">CALCULATOR DIGITAL</h3></div>
<div class="col-12 col-md-4 p-3 p-md-5 bg-white border border-white"></div>
<div class="col-12 col-md-4 p-3 p-md-5 bg-light border border-white">
<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
<form method="post">
<table class="table" align="center">
    <tr class="text-center">
       RESULT
    </tr>
    <tr class="text-center">
        <p class="display-4"><strong><?php echo $result; ?><strong></p>
    </tr>
    <tr>
        <td>INSERT NUMBER</td>
        <td><input type="text" name="n1"></td>
    </tr>
    <tr>
        <td>SELECT COMMAND</td>
        <td><select name="op">
            <option value="+">+ (ditambah)</option>
            <option value="-">- (dikurangi)</option>
            <option value="*">* (di kalikan)</option>
            <option value="/">/ (di bagi)</option>
        </select></td>
    </tr>
    <tr>
        <td>INSERT NUMBER</td>
        <td><input type="text" name="n2"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" class="button btn-block display-4" name="submit" value="HASILKAN"></td>
    </tr>

</table>
</form>
</div>
<div class="col-12 col-md-4 p-3 p-md-5 bg-white border border-white"></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>