@extends('students.master')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">Them sinh vien moi</div>
        <div class="card-body">
            <form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Ten sinh vien</label>
                    <div class="col sm-10">
                        <input type="text" name="StudentName" class="form-control"/>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Dia chi Email</label>
                    <div class="col sm-10">
                        <input type="text" name="StudentEmail" class="form-control"/>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Gioi tinh</label>
                    <div class="col sm-10">
                        <select name="StudentGender" class="form-control">
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>
                </div>
            <div class="mb-3">
                <label for="ClassRoomID" class="form-label">Chon lop</label>
                <select name="ClassRoomID" id="ClassRoomID" class="form-select" required>
                    @foreach ($classrooms as $classroom)
                        <option value="{{$classroom->ClassRoomID}}">{{$classroom->ClassRoomName}}</option>
                    @endforeach
                </select>
            </div>
                <div class="text-center">
                    <a href="{{route('students.index')}}" class="btn btn-secondary">Quay lai</a>
                    <input type="submit" class="btn btn-primary" value="Them"/>
                </div>
            </form>
        </div>
    </div>
@endsection