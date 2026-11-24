use App\Http\Controllers\AuthController;
Route::post('/auth/register', [AuthController::class, 'register']);