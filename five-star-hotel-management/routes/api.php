use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuItemController;

Route::apiResource('rooms', RoomController::class);
Route::apiResource('guests', GuestController::class);
Route::apiResource('bookings', BookingController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('menu-items', MenuItemController::class);
