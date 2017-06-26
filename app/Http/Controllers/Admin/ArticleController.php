<?php

namespace App\Http\Controllers\Admin;

use App\Articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{

    //添加文章
    public function addArticle(){

        return view('admin.addarticle');

    }

    /**
     * TODO:添加文章
     * @param Request $request
     * @return string
     */
    public  function newArticle(Request $request){
        DB::beginTransaction();
        try{
            //数据验证
            $this->validate($request,[
                'title' => 'required',
                'author' => 'required',
                'type' => 'required',
                'content' => 'required',
            ]);

            //插入数据
            $article = new Articles();
            $article->title = $request->input('title');
            $article->author = $request->input('author');
            $article->keyword = $request->input('keyword');
            $article->content = $request->input('content');
            $article->type = $request->input('type');
            if($article->save()){
                DB::commit();
                return $this->jsonSuccess('文章添加成功');
            }
        }catch(\Exception $e){
            DB::rollBack();
            return $this->jsonError('401','请完善文章信息.');
        }
    }

    /**
     * TODO:后台文章列表
     * @return $this
     */
    public function articleList()
    {
        $article = new Articles();
        $data = $article->get();
        return view('admin.articleList')->with('data',$data);
    }

    public function articleDel(Request $request)
    {
        try{
            DB::beginTransaction();
            $this->validate($request,[
                'id'=>'required',
            ]);
            $article = new Articles();
            $id= $request->input('id');
            if($article::find($id)->delete()){
                DB::commit();
                return $this->jsonSuccess('删除成功.');
            }

        }catch (\ Exception $e){
            DB::rollback();
            return $this->jsonError('401','删除失败');
        }

    }
}
