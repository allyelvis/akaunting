use Stripe\Checkout\Session;

public function checkout(Request $request) {
    $session = Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => ['name' => 'Hotel Booking'],
                'unit_amount' => 100 * 100,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('success'),
        'cancel_url' => route('cancel'),
    ]);
    return redirect($session->url);
}
