@extends('layouts.main')
@section('content')

    <div>

        <h3>Добавить страницу курсу {{$course->title}}</h3>
        <a class="btn btn-outline-success" href="{{route('course.show',$course->id)}}" role="button">Назад</a>

        <form class="gx-3 gy-2" action="{{route('page.store', ['course' => $course->id])}} " method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="col col-sm-5">
                <label for="name" class="form-label">Название</label>
                <input type="text" name="name" class="form-control" id="name">
                <br>
            </div>
            @error('name')
            <p class="text-danger">Введите название</p>
            @enderror
            <div class="col col-sm-5">
                <label for="text">Текст</label>
                <textarea name="text" class="form-control" id="text"></textarea>
                <br>
            </div>
            @error('text')
            <p class="text-danger">Введите текст</p>
            @enderror
            <div class="col col-sm-5">
                <label for="homework_condition">Домашнее задание</label>
                <textarea name="homework_condition" class="form-control" id="homework_condition"></textarea>
                <br>
            </div>

            <div class="col col-sm-5">
                <label for="answer" class="form-label">Ответ на домашнее задание</label>
                <input type="text" name="answer" class="form-control" id="answer">
                <br>
            </div>
            <div class="col col-sm-5">
                <label for="youtube_link" class="form-label">Ссылка</label>
                <input type="text" name="youtube_link" class="form-control" id="youtube_link">
                <br>
            </div>
            <div class="col col-sm-5">
                <label for="points" class="form-label">Баллы за задание</label>
                <input type="text" name="points" class="form-control" id="points">
                <br>
            </div>
            <div class="col col-sm-5">
                <label for="trys" class="form-label">Попытки</label>
                <input type="text" name="trys" class="form-control" id="trys">
                <br>
            </div>
            <div>
                <div class="form-group">
                    <input type="file" name="image">
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
                Создать урок
            </button>
            <!-- Всплывающее окно -->
            <div class="modal" tabindex="-1" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Создание урока</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                            <p>Создать урок?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-success">Создать урок</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
