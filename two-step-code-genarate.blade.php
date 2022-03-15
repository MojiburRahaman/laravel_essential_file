use PragmaRX\Google2FA\Google2FA;

$code = app(Google2FA::class)->getCurrentOtp(decrypt($request->challengedUser()->two_factor_secret));
Mail::to($request->challengedUser()->email)->send(new TwofactorCode($code));
