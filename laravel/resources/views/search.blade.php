<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    .top{

        width:100%;

        height:180px;

        background-color:skyblue;

        text-align:center;

    }

    ul{

        list-style:none;

    }

   h1{

       margin:0 auto;

   }

   .search{

        margin-top:40px;

   }

   .search a{

       display:inline-block;

       background-color:#12234312;    

       text-decoration:none;

       width:60px;

       height:38px;

       vertical-align:baseline;

       line-height:38px;

       color:red;

   }

    .search input{

        outline:none;

        width:400px;

        height:30px;

        color:skyblue;

        font-size:18px;
    }

</style>
<body>
      <div class="top">

           <h1>search</h1>

             <div class="search">

                 <input class="word" type="text" placeholder="输入关键字"><a href="#" onclick="search_info()">搜索</a>

            </div>

      </div>

      <div>

          <ul>
            @if($info!='null')
            @foreach($info as $v)
            <li>{{$v['content']}}</li>
            @endforeach
            @endif
          </ul>

      </div>

     
       
</body>
</html>
<script src="/js/jquery.min.js"></script>
<script>

    function search_info(){

        var word = $(".word").val();

        if(word==''){

            alert('请填写要查询的信息！！！');

        }else{

            location.href="search?word="+word;

        }

       
    }


</script>