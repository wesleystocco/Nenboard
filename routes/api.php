Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('boards', BoardController::class);
    Route::apiResource('boards.lists', BoardListController::class)->shallow();
    Route::apiResource('lists.cards', CardController::class)->shallow();
    Route::post('/logout', [AuthController::class, 'logout']);
});