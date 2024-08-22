use App\Http\Controllers\WatchTimeController;
use App\Http\Controllers\RevenueController;

Route::post('/watchtime', [WatchTimeController::class, 'store']);
Route::get('/calculate-revenue', [RevenueController::class, 'calculate']);
