<?php

declare(strict_types=1);

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Http\Requests\Step\CreateRequest;
use App\Http\Requests\Step\UpdateRequest;
use App\Models\Step;
use App\Repository\GoalRepositoryInterface;
use App\Repository\StepRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

final class StepController extends Controller
{
    public function __construct(
        private readonly StepRepositoryInterface $stepRepository,
//        private readonly GoalRepositoryInterface $goalRepository
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('steps.create', [
//            'goals' => $this->goalRepository->list(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request): RedirectResponse
    {
        $this->stepRepository->create($request->validated());
        return redirect()
            ->route('goals.show', ['goal' => $request->goal_id])
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
    public function edit(Step  $step): View
    {
        return view('steps.edit', [
            'step' => $step,
//            'goals' => $this->goalRepository->list(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Step $step): RedirectResponse
    {
        $status = $this->stepRepository->update($step, $request->validated());

        if ($status) {
            return redirect()
                ->route('goals.show', ['goal' => $step->goal_id])
                ->with('success', __('Шаг успешно обновлен'));
        }

        return back()->with('error', __('Не удалось обновить шаг'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Step $step): JsonResponse
    {
        try {
            $this->stepRepository->delete($step);

            return response()->json('ok');
        } catch (\Throwable $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
