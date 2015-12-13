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
                                @if($User->city_id)
                                    {{$User->city->country->title}}
                                @else
                                    <span class="text-muted">Не указано</span>
                                @endif
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
                            <td>
                                @if($User->speciality)
                                    {{$User->speciality}}
                                @else
                                    <span class="text-muted">Не указано</span>
                                @endif
                            </td>
                        </tr>
                        @if($User->work_place)
                            <tr>
                                <th>Место работы</th>
                                <td>{{$User->work_place}}</td>
                            </tr>
                        @endif
                        <tr>
                            <th>E-Mail</th>
                            <td>{{$User->email}}</td>
                        </tr>
                        <tr>
                            <th>Телефон</th>
                            <td>
                                @if($User->telephone)
                                    {{$User->telephone}}
                                @else
                                    <span class="text-muted">Не указано</span>
                                @endif
                            </td>
                        </tr>
                        @if($User->skype)
                            <tr>
                                <th>Skype</th>
                                <td>{{$User->skype}}</td>
                            </tr>
                        @endif
                        @if($User->site_url)
                            <tr>
                                <th>URL сайта/болга</th>
                                <td>{{$User->site_url}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop