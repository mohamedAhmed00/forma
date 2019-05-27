<?php

namespace App\Providers;

use App\Repository\Eloquent\Forma\ActivityDetailElequent;
use App\Repository\Eloquent\Forma\ActivityElequent;
use App\Repository\Eloquent\Forma\BaseElequent;
use App\Repository\Eloquent\Forma\CategoryNewsElequent;
use App\Repository\Eloquent\Forma\DietElequent;
use App\Repository\Eloquent\Forma\LocationElequent;
use App\Repository\Eloquent\Forma\MembershipElequent;
use App\Repository\Eloquent\Forma\NewsElequent;
use App\Repository\Eloquent\Forma\ServiceElequent;
use App\Repository\Eloquent\Forma\SubCategoryNewsElequent;
use App\Repository\Eloquent\Store\CartElequent;
use App\Repository\Eloquent\Store\CategoryElequent;
use App\Repository\Eloquent\Store\ClientElequent;
use App\Repository\Eloquent\Store\CompareElequent;
use App\Repository\Eloquent\Store\FeatureElequent;
use App\Repository\Eloquent\Store\FeeElequent;
use App\Repository\Eloquent\Store\InstgramChannleElequent;
use App\Repository\Eloquent\Store\MainSettingElequent;
use App\Repository\Eloquent\Store\OfferElequent;
use App\Repository\Eloquent\Store\OrderElequent;
use App\Repository\Eloquent\Store\ProductElequent;
use App\Repository\Eloquent\Store\ProfileElequent;
use App\Repository\Eloquent\Store\SliderElequent;
use App\Repository\Eloquent\Store\SliderSayElequent;
use App\Repository\Eloquent\Store\SubcategoryElequent;
use App\Repository\Eloquent\Store\WishlistElequent;
use App\Repository\Interfaces\Forma\ActivityDetailInterface;
use App\Repository\Interfaces\Forma\ActivityInterface;
use App\Repository\Interfaces\Forma\BaseInterface;
use App\Repository\Interfaces\Forma\CategoryNewsInterface;
use App\Repository\Interfaces\Forma\DietInterface;
use App\Repository\Interfaces\Forma\LocationInterface;
use App\Repository\Interfaces\Forma\MembershipInterface;
use App\Repository\Interfaces\Forma\NewsInterface;
use App\Repository\Interfaces\Forma\ServiceInterface;
use App\Repository\Interfaces\Forma\SubCategoryNewsInterface;
use App\Repository\Interfaces\Store\CartInterface;
use App\Repository\Interfaces\Store\CategoryInterface;
use App\Repository\Interfaces\Store\ClientInterface;
use App\Repository\Interfaces\Store\Comparinterface;
use App\Repository\Interfaces\Store\FeatureInterface;
use App\Repository\Interfaces\Store\FeeInterface;
use App\Repository\Interfaces\Store\InstgramChannleInterface;
use App\Repository\Interfaces\Store\MainSettingInterface;
use App\Repository\Interfaces\Store\OfferInterface;
use App\Repository\Interfaces\Store\OrderInterface;
use App\Repository\Interfaces\Store\ProductInterface;
use App\Repository\Interfaces\Store\ProfileInterface;
use App\Repository\Interfaces\Store\SliderInterface;
use App\Repository\Interfaces\Store\SliderSayInterface;
use App\Repository\Interfaces\Store\SubcategoryInterface;
use App\Repository\Interfaces\Store\WishlistInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * @auther Nader Ahmed
     * @return void
     */
    public function boot()
    {
        $this->app->bind(BaseInterface::class,BaseElequent::class);
        $this->app->bind(ActivityInterface::class,ActivityElequent::class);
        $this->app->bind(LocationInterface::class,LocationElequent::class);
        $this->app->bind(MembershipInterface::class,MembershipElequent::class);
        $this->app->bind(NewsInterface::class,NewsElequent::class);
        $this->app->bind(ServiceInterface::class,ServiceElequent::class);
        $this->app->bind(ActivityDetailInterface::class,ActivityDetailElequent::class);
        $this->app->bind(CategoryInterface::class,CategoryElequent::class);
        $this->app->bind(ClientInterface::class,ClientElequent::class);
        $this->app->bind(FeatureInterface::class,FeatureElequent::class);
        $this->app->bind(InstgramChannleInterface::class,InstgramChannleElequent::class);
        $this->app->bind(MainSettingInterface::class,MainSettingElequent::class);
        $this->app->bind(\App\Repository\Interfaces\Store\NewsInterface::class,\App\Repository\Eloquent\Store\NewsElequent::class);
        $this->app->bind(OfferInterface::class,OfferElequent::class);
        $this->app->bind(SubcategoryInterface::class,SubcategoryElequent::class);
        $this->app->bind(ProductInterface::class,ProductElequent::class);
        $this->app->bind(SliderInterface::class,SliderElequent::class);
        $this->app->bind(SliderSayInterface::class,SliderSayElequent::class);
        $this->app->bind(CartInterface::class,CartElequent::class);
        $this->app->bind(Comparinterface::class,CompareElequent::class);
        $this->app->bind(WishlistInterface::class,WishlistElequent::class);
        $this->app->bind(ProfileInterface::class,ProfileElequent::class);
        $this->app->bind(OrderInterface::class,OrderElequent::class);
        $this->app->bind(FeeInterface::class,FeeElequent::class);
        $this->app->bind(DietInterface::class,DietElequent::class);
        $this->app->bind(CategoryNewsInterface::class,CategoryNewsElequent::class);
        $this->app->bind(SubCategoryNewsInterface::class,SubCategoryNewsElequent::class);
    }

    /**
     * Register services.
     * @auther Nader Ahmed
     * @return void
     */
    public function register()
    {
        //
    }
}
