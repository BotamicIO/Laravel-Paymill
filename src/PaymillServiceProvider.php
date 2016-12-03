<?php

/*
 * This file is part of Laravel Paymill.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Paymill;

class PaymillServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('paymill', function ($app) {
            return new Client(config('services.paymill.secret'));
        });
    }

    public function provides(): array
    {
        return ['paymill'];
    }
}
