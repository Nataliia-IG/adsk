@extends('app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-responsive" alt="" src="{{$User->avatar}}">
                    <input class="btn btn-default btn-block" type="file" name="avatar">
                </div>
                <div class="col-lg-8">
                    <table class="table">
                        <tr>
                            <th>Фамилия</th>
                            <td><input class="form-control" type="text" name="user[last_name]" value="{{$User->last_name}}" required></td>
                        </tr>
                        <tr>
                            <th>Имя</th>
                            <td><input class="form-control" type="text" name="user[first_name]" value="{{$User->first_name}}" required></td>
                        </tr>
                        <tr>
                            <th>Отчество</th>
                            <td><input class="form-control" type="text" name="user[second_name]" value="{{$User->second_name}}"></td>
                        </tr>
                        <tr>
                            <th>Возраст</th>
                            <td><input class="form-control date-picker" type="text" name="user[birthday]" value="{{$User->birthday}}"></td>
                        </tr>
                        <tr>
                            <th>Страна</th>
                            <td>
                                <select class="form-control" name="user[country_id]" id="">
                                    @foreach($Countries as $Country)
                                        @if($Country->id == $User->country_id)
                                            <option value="{{$Country->id}}" selected>{{$Country->title}}</option>
                                        @else
                                            <option value="{{$Country->id}}">{{$Country->title}}</option>
                                        @endif
                                    @endforeach
                                </select>

                            </td>
                        </tr>
                        <tr>

                            <th>Город</th>
                            <td>
                                @if($User->city_id)
                                    {{$User->city->title}}
                                @else
                                    <span class="text-muted">Не указано</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>ВУЗ</th>
                            <td>
                                @if($User->university_id)
                                    {{$User->university->title}}
                                @else
                                    <span class="text-muted">Не указано</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Выпускная<br>специальность</th>
                            <td><input class="form-control" type="text" name="user[speciality]" value="{{$User->speciality}}"></td>
                        </tr>

                            <tr>
                                <th>Место работы</th>
                                <td><input class="form-control" type="text" name="user[work_place]" value="{{$User->work_place}}"></td>
                            </tr>

                        <tr>
                            <th>E-Mail</th>
                            <td>{{$User->email}}</td>
                        </tr>
                        <tr>
                            <th>Телефон</th>
                            <td><input class="form-control" type="text" name="user[telephone]" value="{{$User->telephone}}"></td>
                        </tr>

                            <tr>
                                <th>Skype</th>
                                <td><input class="form-control" type="text" name="user[skype]" value="{{$User->skype}}"></td>
                            </tr>

                            <tr>
                                <th>URL сайта/болга</th>
                                <td><input class="form-control" type="text" name="user[site_url]" value="{{$User->site_url}}"></td>
                            </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
@stop