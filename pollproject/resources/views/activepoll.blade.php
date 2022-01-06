<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="design.css">

</head>

<body>

    <div class="header">
        <center><h3><b>Online Poll</b></h3></center>
    </div>    

            <div class="row">            
                <div class="col-md-2">
                        <ul>
                            <li><a href="/addpoll" class="btn btn-warning">Add Poll</a></li><br>
                            <li><a href="/activepoll" class="btn btn-warning">Active Poll</a></li><br>
                            <li><a href="/showresult" class="btn btn-warning">Show Result</a></li><br>
                            <li><a href="/logout" class="btn btn-warning">Log Out</a></li><br>
                        </ul>  
                </div>
                
                <div class="col-md-10 pick">

                    <div class="card mt-5">
                        <div class="card-body">
                            <center><h2 class="card-title">All CREATED POLLS(Select which one you want to active)</h2></center>
                            
                            <div class="row mt-5">
                                <div class="col-md-12">

                                    <form name="" action="" method="POST">
                                        @csrf

                                        @foreach($data as $item)

                                        <table>
                                            <tr>
                                                <td><h5><b>Quetion: </b></h5></td>
                                                <td> <h4><b>{{$item->pid}}</b><h4></td>
                                                    <td> <h4><b>{{$item->poll_name}}</b><h4></td>
                                            </tr>
                                            <tr>
                                                @if($item->status==1)
                                                    <td>
                                                        <a href="/editdata/{{ $item->pid }}" class="btn btn-danger">DEACTIVE</a>
                                                    </td>
                                                @else        
                                                    <td>
                                                        <a href="/editdata/{{ $item->pid }}" class="btn btn-success">ACTIVE</a>
                                                    </td>
                                                @endif

                                               
                                            </tr>
                                        </table>

                                        @endforeach

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        <div class="footer">
            
        </div>

</body>
</html>
