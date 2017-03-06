<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <style>
            body {
                background-color: #393E40;
                padding-top: 80px;
            }

            .card-form-title {
                color: gainsboro;
            }

            .form-control-money {
                text-align: right;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-6">
                    <h3 class="text-center text-uppercase card-form-title">
                        Шилжүүлэх
                    </h3>

                    <div class="card">
                        <div class="card-block">
                            <form action="{{ url("/donate") }}" method="POST">
                                {{ csrf_field() }}
                                
                                {{-- Gateway --}}
                                <div class="form-group">
                                    <label for="gateway">Шилжүүлэх хэлбэр</label>
                                    <select class="form-control" name="gateway">
                                        <option value="log">Лог</option>
                                        <option value="khan">Хаан банк</option>
                                        <option value="golomt">Голомт банк</option>
                                        <option value="state">Төрийн банк</option>
                                        <option value="tdb">Худалдаа хөгжлийн банк</option>
                                    </select>
                                </div>

                                {{-- Amount --}}
                                <div class="form-group">
                                    <label for="amount">Мөнгөн дүн</label>
                                    <input type="text" class="form-control form-control-money" name="amount" placeholder="00.0">
                                </div>

                                {{-- Description --}}
                                <div class="form-group">
                                    <label for="amount">Тайлбар</label>
                                    <textarea name="description" rows="5" class="form-control"></textarea>
                                </div>
                                
                                {{-- Action --}}
                                <div class="form-group">
                                    <button class="btn btn-info btn-lg btn-block">
                                        Илгээх
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
