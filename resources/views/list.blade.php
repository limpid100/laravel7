<!DOCTYPE html>
<html lang="zh-CN">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>笔记</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
	<div class="container" style="margin-top: 60px;">
		<div class="text-center"><h2>读书笔记</h2></div>
		<style>
			.digest_count{
				float:right;
				width:70px;
			}
		</style>
		<div class="col-sm-12">
			<div class="list-group">
                @foreach($books as $book)
				<a href="/detail/{{$book->id}}" class="list-group-item">{{$book->name}}<span class="digest_count">笔记：{{$book->count}}</span></a>
                @endforeach
			</div>
		</div>
		<div class="col-sm-12 text-right">
			<a href="book_add" class="btn btn-success">添加</a>
		</div>
	</div>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
