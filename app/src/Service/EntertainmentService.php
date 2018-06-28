<?php

namespace App\Service;

use App\Repository\EntertainmentTypeRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Serializer\SerializerInterface;

class EntertainmentService
{
    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * @var EntertainmentTypeRepository
     */
    private $entertainmentTypeRepository;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * EntertainmentService constructor.
     * @param ObjectManager $objectManager
     * @param EntertainmentTypeRepository $taskRepository
     * @param SerializerInterface $serializer
     */
    public function __construct(
        ObjectManager $objectManager,
        EntertainmentTypeRepository $taskRepository,
        SerializerInterface $serializer
    ) {
        $this->objectManager = $objectManager;
        $this->entertainmentTypeRepository = $taskRepository;
        $this->serializer = $serializer;
    }

    /**
     * @return string
     */
    public function getEntertainments()
    {
        $entertainments = $this->entertainmentTypeRepository->getAvailableEntertainments();
        return $entertainments;
    }

//    /**
//     * @param int $listId
//     * @return array
//     * @throws \Doctrine\ORM\NoResultException
//     * @throws \Doctrine\ORM\NonUniqueResultException
//     */
//    public function getList($listId)
//    {
//        $list = $this->todoListRepository->getList($listId);
//
//        return $this->formatList($list);
//    }
//
//    /**
//     * @param string $text
//     * @return array
//     */
//    public function createList($text)
//    {
//        $todoList = new TodoList();
//        $todoList->setName($text);
//
//        $this->objectManager->persist($todoList);
//        $this->objectManager->flush();
//
//        return $this->formatList($todoList);
//    }
//
//    /**
//     * @param int $listId
//     * @return array
//     */
//    public function getTasks($listId)
//    {
//        $tasks = $this->taskRepository->getListTasks($listId);
//
//        return array_map(
//            function (Task $task) {
//                return $this->formatTask($task);
//            },
//            $tasks
//        );
//    }
//
//    /**
//     * @param int $listId
//     * @param int $taskId
//     * @return array
//     * @throws \Doctrine\ORM\NoResultException
//     * @throws \Doctrine\ORM\NonUniqueResultException
//     */
//    public function getTask($listId, $taskId)
//    {
//        $task = $this->taskRepository->getTask($taskId, $listId);
//
//        return $this->formatTask($task);
//    }
//
//    /**
//     * @param int $listId
//     * @param string $text
//     * @return array
//     * @throws \Doctrine\ORM\NoResultException
//     * @throws \Doctrine\ORM\NonUniqueResultException
//     */
//    public function addTask($listId, $text)
//    {
//        $task = new Task();
//        $task->setText($text);
//
//        $todoList = $this->todoListRepository->getList($listId);
//        $todoList->addTask($task);
//
//        $task->setTodoList($todoList);
//
//        $this->objectManager->persist($task);
//        $this->objectManager->persist($todoList);
//        $this->objectManager->flush();
//
//        return $this->formatTask($task);
//    }
//
//    /**
//     * @param int $listId
//     * @param int $taskId
//     * @param string $text
//     * @return array
//     * @throws \Doctrine\ORM\NoResultException
//     * @throws \Doctrine\ORM\NonUniqueResultException
//     */
//    public function updateTask($listId, $taskId, $text)
//    {
//        $task = $this->taskRepository->getTask($taskId, $listId);
//        $task->setText($text);
//
//        $this->objectManager->persist($task);
//        $this->objectManager->flush();
//
//        return $this->formatTask($task);
//    }
//
//    /**
//     * @param int $listId
//     * @param int $taskId
//     * @throws \Doctrine\ORM\NoResultException
//     * @throws \Doctrine\ORM\NonUniqueResultException
//     */
//    public function removeTask($listId, $taskId)
//    {
//        $task = $this->taskRepository->getTask($listId, $taskId);
//
//        $this->objectManager->remove($task);
//        $this->objectManager->flush();
//    }
//
//    /**
//     * @param int $listId
//     * @param int $taskId
//     * @return array
//     * @throws \Doctrine\ORM\NoResultException
//     * @throws \Doctrine\ORM\NonUniqueResultException
//     */
//    public function resolveTask($listId, $taskId)
//    {
//        $task = $this->taskRepository->getTask($listId, $taskId);
//        $task->setStatus(Task::STATUS_DONE);
//
//        $this->objectManager->persist($task);
//        $this->objectManager->flush();
//
//        return $this->formatTask($task);
//    }
//
//    /**
//     * TODO move to formatters
//     *
//     * @param TodoList $list
//     * @return array
//     */
//    private function formatList(TodoList $list)
//    {
//        return [
//            'id' => $list->getId(),
//            'name' => $list->getName(),
//            'tasks' => $list->getTasks()->map(
//                function (Task $task) {
//                    return $task->getId();
//                }
//            )->toArray(),
//            'total_tasks' => $list->getTasks()->count(),
//        ];
//    }
//
//    /**
//     * TODO move to formatters
//     *
//     * @param Task $task
//     * @return array
//     */
//    private function formatTask(Task $task)
//    {
//        return [
//            'id' => $task->getId(),
//            'text' => $task->getText(),
//            'status' => $task->getStatus() === Task::STATUS_DONE ? 'Done' : 'Undone',
//            'created_at' => $task->getCreatedAt(),
//            'list' => $task->getTodoList()->getId(),
//        ];
//    }
}