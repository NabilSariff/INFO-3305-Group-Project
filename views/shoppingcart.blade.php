@extends('layouts.app')


@section('content')
<h1>This is your Shopping Cart!</h1>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</head>
<body>
 
<nav class="navbar navbar-dark bg-dark">
 
    <span class="navbar-brand mb-0 h1">Shoeniverse</span>
 
 
</nav>
 
<div class="row">
 
    <div class="col-sm-3">
 
        <div class="container">
            <div class="list-group-item list-group-item-action active">Shoes</div>
 
 
        <div class="panel-body bg-dark" style="color: white">
            
            <form id="frm-project">
                <div class="form-group">
 
                    <div>
                        <img src="{{URL('images/1.jpeg')}}" id="Nike" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                            <b>Nike (RM 350)</b>
                    </div>
 
 
                    <div>
                        <img src="{{URL('images/2.jpeg')}}" id="Vans" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Vans (RM 200)</b>
                    </div>
 
                    <div>
                        <img src="{{URL('images/3.jpeg')}}" id="Adidas" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Adidas (RM 450)</b>
                    </div>
 
                    <div>
                        <img src="{{URL('images/4.jpeg')}}" id="Puma" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Puma (RM 150)</b>
                    </div>
 
                    <div>
                        <img src="{{URL('images/5.jpeg')}}" id="New Balance" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>New Balance (RM 250)</b>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
 
    <div class="col-sm-6">
        <div class="container">
            <div class="list-group-item list-group-item-action active">Add Shoes</div>
            <table id="tbl-item" class="table table-dark table-bordered" cellpadding="0" cellspacing="0" width="100%" align="center">
                <thead>
 
                <tr>
                    <th>Delete</th>
                    <th>Shoes</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
 
                <tbody>
 
                </tbody>
 
            </table>
        </div>
    </div>
 
    <div class="col-sm-3">
        <div class="list-group-item list-group-item-action active">Receipt</div>
        <div>
            <label>Sum (RM)</label>
            <input type="text" style="color: yellow; background: black; font-size: 30px;" id="total" name="total" placeholder="" required>
        </div>
        </br>
 
        <div>
            <input type="button" class="btn btn-warning" value="Reset" name="Reset" id="Reset">
        </div>
 
    </div>
 
</div>
 
 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Qty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <input type="number" style="color: yellow; background: black; font-size: 30px;" id="qty" name="qty" placeholder="Qty" required>
                </div>
            </div>
 
 
 
 
            <div class="modal-footer">
                <input type="button" class="btn btn-info" value="Add" name="add" id="add" onclick="add()">
 
 
            </div>
        </div>
    </div>
</div>
 
<script src="component/jquery/jquery.js"></script>
<script src="component/jquery/jquery.min.js"></script>
 
<script type="text/javascript">
 
    var total = 0;
    var tot = 0;
 
    var item = null;
    var price = 0;
 
 
    var a = "";
 
    $("img").on("click",function()
        {
 
            a = $(this).prop('id')
 
        });
 
 
    function add()
    {
        if(a == "Nike")
        {
            item = "Nike";
            price = 350;
        }
        else if(a == "Vans")
        {
            item = "Vans";
            price = 200;
        }
        else if(a == "Adidas")
        {
            item = "Adidas";
            price = 450;
        }
        else if(a == "Puma")
        {
            item = "Puma";
            price = 150;
        }
 
        else if(a == "New Balance")
        {
            item = "New Balance";
            price = 250;
        }
 
        var qty = $('#qty').val();
        tot = qty * price;
 
        var table1 =
            "<tr>" +
            "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</td>" +
            "<td>" + item    +  "</td>" +
            "<td>" + price    +  "</td>" +
            "<td>" + qty    +  "</td>" +
            "<td>" + tot    +  "</td>" +
            "</tr>" ;
 
 
        total += Number(tot);
        $('#total').val(total);
 
        $("table tbody").append(table1);
        $("exampleModal").modal('toggle');
        $('#qty').val("1");
    }
 
    function deleterow(e)
    {
        total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();
 
    }
 
    $('#reset').click(function()
    {
        location.reload();
    });
</script>
@endsection

</body>
 
</html>

