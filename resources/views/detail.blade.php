<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>挪威的森林</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<style>
    .well {
        padding: 12px;
        margin-bottom: 15px;
    }

    .well p {
        margin: 0;
        line-height: 1.5;
    }
</style>
<div class="container" style="margin:20px auto;">
    <div style="text-align: center">
        <p>
        <h3>{{$book->name}}</h3></p>
        <p>{{$book->author}}</p>
        <p><i>阅读量：{{$book->clicks}}&nbsp;&nbsp;&nbsp;&nbsp;创建时间：{{$book->created_at}}</i></p>
    </div>
    @foreach($digests as $digest)
    <div class="well">
        <p>{{$digest->content}}</p>
        <p style="text-align: right">{{$digest->created_at}} &nbsp;&nbsp;&nbsp;&nbsp;<a href="digest_edit.html"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-trash"></span></a></p>
    </div>
    @endforeach
	<div class="col-sm-12 text-right">
		<a href="list.blade.php" class="btn btn-success">返回</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="digest_add.html" class="btn btn-success">添加</a>
	</div>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
