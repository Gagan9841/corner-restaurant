        <?php


        use Illuminate\Support\Facades\Route;
        use App\Http\Controllers\{MainCategoryController,MenuCategoryController,MenuController,SubCategoryController,TablesController};


        /*
        |--------------------------------------------------------------------------
        | Web Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register web routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | contains the "web" middleware group. Now create something great!
        |
        */

        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/dashboard', function(){
            return view('admin.dashboard');
        });
        // Route::get('/main-category', function(){
        //     return view('admin.mainCategory');
        // });
        Route::get('/catalog/main-category',[
            MainCategoryController::class,'index'
        ]);
        Route::get('/catalog/main-category/create',[
            MainCategoryController::class,'create'
        ]);
        Route::post('/catalog/main-category/store',[
            MainCategoryController::class,'store'
        ]);
        Route::get('/catalog/main-category/{main_category}/edit',[
            MainCategoryController::class,'edit'
        ])->name('main-category.edit');
        Route::patch('/catalog/main-category/{main_category}/update',[
            MainCategoryController::class,'update'
        ])->name('main-category.update');
        Route::delete('/catalog/main-category/{main_category}/delete',[
            MainCategoryController::class,'destroy'
        ])->name('main-category.delete');
        // Route::delete('/catalog/main-category/{category}/delete')

        Route::get('/catalog/menu-category',[
            // 'MenuCategoryController@index'
            MenuCategoryController::class,'index'
        ]);
        Route::get('/catalog/sub-category',[
            // 'MenuCategoryController@index'
            SubCategoryController::class,'index'
        ]);

        Route::get('/catalog/menu',[
            // 'MenuCategoryController@index'
            MenuController::class,'index'
        ]);
