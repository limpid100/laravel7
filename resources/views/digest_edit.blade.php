<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>编辑</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
<div class="text-center" style="margin:10px 0">
	<h2>读书笔记编辑</h2>
</div>
<form class="form-horizontal" role="form" action="" method="post">
    @csrf
    <div class="form-group">
		<div class="col-sm-12">
		  <input class="form-control" id="disabledInput" type="text" value="{{$digest->book->name}}" disabled>
		</div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="content" placeholder="内容">{{$digest->content}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 text-center">
            <input type="button" class="btn btn-info" onclick="javascript:history.go(-1);" value="返回"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" class="btn btn-warning" value="重置"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" class="btn btn-success" value="提交"/>
        </div>
    </div>
</form>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
