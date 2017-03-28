@extends('layout')

@section('content')
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
                        <option value="tdb" selected>Худалдаа хөгжлийн банк</option>
                    </select>
                </div>

                {{-- Amount --}}
                <div class="form-group">
                    <label for="amount">Мөнгөн дүн</label>
                    <input type="text" class="form-control form-control-money" name="amount" placeholder="00.0" value="1000">
                </div>

                {{-- Description --}}
                <div class="form-group">
                    <label for="amount">Тайлбар</label>
                    <textarea name="description" rows="5" class="form-control">Transaction Description</textarea>
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
@stop