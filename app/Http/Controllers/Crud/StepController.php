<?php

declare(strict_types=1);

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Http\Requests\Step\CreateRequest;
use App\Repository\GoalRepositoryInterface;
use App\Repository\StepRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function __construct(
        private readonly StepRepositoryInterface $stepRepository,
        private readonly GoalRepositoryInterface $goalRepository
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('steps.index', [
            'steps' => $this->stepRepository->list(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('steps.create', [
            'goals' => $this->goalRepository->list(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request): RedirectResponse
    {
        $this->stepRepository->create($request->validated());
        return redirect()
            ->route('steps.index')
            ->with('success', __('Шаг успешно создан'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
