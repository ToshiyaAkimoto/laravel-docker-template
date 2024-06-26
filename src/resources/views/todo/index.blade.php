<!doctype html>
      @extends('layouts.base') <!-- 継承する親Bladeを指定 -->
      @section('content')
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p class="text-left">
              <a class="btn btn-success" href="{{ route('todo.create') }}">ToDoを追加</a><!--名前付きルートでURLを指定している-->
            </p>
            <div class="card">
              <div class="card-header">
                ToDo一覧
              </div>
              <div class="list-group list-group-flush">
                @foreach ($todoList as $todo)
                  <div class="d-flex align-items-center p-2">
                    <span class="col-9">{{ $todo->content }}</span>
                  </div>
                @endforeach <!--「@」はディレクティブ 一般的なPHPの制御構文の便利な短縮記述方法を提供してくれる-->
              </div>
            </div>
          </div>
        </div>
        @endsection
     </div>
    </main>
  </div>
</body>
</html>