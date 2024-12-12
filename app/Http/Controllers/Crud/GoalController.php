<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Http\Requests\Goals\CreateRequest;
use App\Http\Requests\Goals\UpdateRequest;
use App\Models\Goal;
use App\Repository\GoalRepositoryInterface;
use App\Repository\ProjectRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

final class GoalController extends Controller
{
    public function __construct(
        private readonly GoalRepositoryInterface $goalRepository,
        private readonly ProjectRepositoryInterface $projectRepository
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('goals.index', [
            'goals' => $this->goalRepository->list(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('goals.create', [
            'projects' => $this->projectRepository->list(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request): RedirectResponse
    {
        $this->goalRepository->create($request->validated());
        return redirect()
            ->route('goals.index')
            ->with('success', __('Цель успешно создана'));
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
    public function edit(Goal $goal): View
    {
        return view('goals.edit', [
            'goal' => $goal,
            'projects' => $this->projectRepository->list(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Goal $goal)
    {
        $goal = $this->goalRepository->update($goal, $request->validated());

        if ($goal) {
            return redirect()
                ->route('goals.index')
                ->with('success', __('Цель успешно обновлена'));
        }

        return back()->with('error', __('Не удалось обновить цель'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
