@vite('resources/css/app.css')
<h1 class="text-center text-2xl py-4">LOGIN</h1>
<form action="/login" method="post">
    @csrf
    <div class="flex flex-col">
        <label for="email">Email:</label>
        <input name="email" id="email" type="email" class="border" />
    </div>
    <div class="flex flex-col">
        <label for="password">Password:</label>
        <input name="password" id="password" type="password" class="border" />
    </div>
    <button type="submit" class="border">Login</button>
</form>
