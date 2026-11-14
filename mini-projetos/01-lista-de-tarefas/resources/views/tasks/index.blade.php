<!doctype html>
<html lang="pt-BR">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Lista de tarefas</title></head>
<body>
    <main>
        <h1>Lista de tarefas</h1>
        <form method="post" action="{{ route('tasks.store') }}">
            @csrf
            <label for="title">Nova tarefa</label>
            <input id="title" name="title" maxlength="120" required>
            <button type="submit">Adicionar</button>
        </form>
        @error('title') <p role="alert">{{ $message }}</p> @enderror
        <ul>
            @forelse ($tasks as $task)
                <li>
                    {{ $task->title }}
                    <form method="post" action="{{ route('tasks.update', $task) }}" style="display:inline">
                        @csrf @method('PUT')
                        <input type="hidden" name="completed" value="0">
                        <label><input type="checkbox" name="completed" value="1" @checked($task->completed) onchange="this.form.submit()"> Concluída</label>
                    </form>
                    <form method="post" action="{{ route('tasks.destroy', $task) }}" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </li>
            @empty
                <li>Nenhuma tarefa cadastrada.</li>
            @endforelse
        </ul>
    </main>
</body>
</html>