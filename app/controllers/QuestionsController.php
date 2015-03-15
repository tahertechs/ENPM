<?php 

class QuestionsController extends BaseController{

	public function __construct(){

		$this->beforeFilter('auth', ['except' => ['show','index']]);
	}

	//List of all questions open to only poster	
	public function getUserQuestions()
	{
		$questions = Question::orderBy('created_at','desc')->where('author_id','=',Auth::user()->id)->paginate(10);

		return View::make('questions.list',compact('questions'));
	}


	//List of all questions open to public
	public function index()
	{
		$questions = Question::orderBy('created_at','desc')->paginate(5);

		return View::make('questions.index',compact('questions'));
	}


	public function create()
	{
		return View::make('questions.create');
	}


	public function store()
	{	
		$rules = array(
			'title'=> 'required',
		);

		$validation = Validator::make(Input::all(), $rules);

		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		} 
		else {

			$question = Question::create([
				'title'		  => Input::get('title'),
				'slug'		  => Str::slug(Input::get('title')),
				'description' => Input::get('description')
			]);	

			$question->author()->associate(Auth::user())->save();

			Flash::success('You have successifully create a question... ');

			return Redirect::route('questions.list');

		}


	}


	public function show($slug)
	{
		$question = Question::where('slug','=', $slug)->first();

		if($question){
			return View::make('questions.show',compact('question'));
		}
		return Redirect::route('questions.index');
	}


	public function edit($id)
	{
		$question = Question::find($id);

		if($question->questionBelongsToUser($id)){
			return View::make('questions.edit',compact('question'));			
		}

		Flash::error('Trying to edit someones else question , BE CAREFULLY BUDDY !');

		return Redirect::route('questions.list');
	}


	public function update($id)
	{
		$user = Auth::user();
		$question = Question::find($id);

		if($question->questionBelongsToUser($id)){

			$rules = array(
				'title'=> 'required',
			);

			$validation = Validator::make(Input::all(), $rules);

			if ($validation->fails()) {
				return Redirect::back()->withErrors($validation)->withInput();
			}

			$question->title = Input::get('title');
			$question->slug = Str::slug(Input::get('title'));
			$question->description = Input::get('description');
			$question->save();

			Flash::success('You have successifully update the question');

			return Redirect::route('questions.list');
		}

		Flash::error('Trying to cheat huh..! , BE CAREFULLY BUDDY...');

		return Redirect::route('questions.list');

	}


	public function delete($id)
	{
		$question = Question::find($id);
		if($question){
			Flash::message('Be sure you really want to do this....');

			return View::make('questions.delete',compact('question'));			
		}
		return Redirect::route('questions.list');

	}

	public function destroy($id)
	{
		
		$question = Question::find($id);

		if($question){
	        foreach ($question->answers as $answer) {
	            $answer->delete();
	        }
	        $question->delete();

			Flash::success('Question Successifully deleted....');

			return Redirect::route('questions.list');			
		}
		return Redirect::route('questions.list');

	}

}