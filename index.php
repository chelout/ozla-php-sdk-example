<?php

require __DIR__ . '/vendor/autoload.php';

$apiKey = 'sednpVgiqkq5shZGgpxKOxObeVI2kRdqw2lGOBg1tOYdso2N5qrkN9pRXGt5';
$domain = 'project1';
$ozla = new Chelout\PhpSdk\Ozla($domain, $apiKey);

/*
 * Users
 */
// $user = $ozla->me();
// dump($user);

// $users = $ozla->users();
// dump($users);

// $user = $ozla->user(1);
// dump($user);

/*
 * Companies
 */
// $companies = $ozla->companies();
// dump($companies);

// $company = $ozla->createCompany([
//     'name' => 'Компания',
//     'url' => 'https://example.com',
//     'address' => 'Москва, Тверская, 1',
// ]);
// dump($company);

// $company = $ozla->company(1);
// dump($company);

// $company = $ozla->updateCompany(1, [
// 	'name' => 'Обновленная компания',
// 	'url' => 'https://example.com',
// 	'address' => 'Москва, Тверская, 3',
// ]);
// dump($company);

// $ozla->deleteCompany(129);

/*
 * Contragents
 */
// $contragents = $ozla->contragents();
// dump($contragents);

// $contragent = $ozla->createContragent([
//     'name' => 'Имя контрагента',
//     'company_id' => 1,
//     'position' => 'Директор',
// ]);
// dump($contragent);

// $contragent = $ozla->contragent(1);
// dump($contragent);

// $contragent = $ozla->updateContragent(1, [
//     'name' => 'Обновленное имя контрагента',
//     'company_id' => 2,
//     'position' => 'Генеральный директор',
// ]);
// dump($contragent);

// $ozla->deleteContragent(1);

/*
 * Deal status colors
 */
// $statusColors = $ozla->statusColors();
// dump($statusColors);

// $statusColor = $ozla->statusColor(1);
// dump($statusColor);

/*
 * Deal status types
 */
// $statusTypes = $ozla->statusTypes();
// dump($statusTypes);

// $statusType = $ozla->statusType(1);
// dump($statusType);

/*
 * Deal statuses
 */
// $statuses = $ozla->statuses();
// dump($statuses);

// $status = $ozla->createStatus([
//     'name' => 'Новый статус',
//     'color_id' => 1,
// ]);
// dump($status);

// $status = $ozla->status(1);
// dump($status);

// $status = $ozla->updateStatus(1, [
//     'name' => 'Обновленный статус',
// ]);
// dump($status);

// $status = $ozla->updateStatusPriority(1, [
// 	'priority' => 3,
// ]);
// dump($status);

// $ozla->deleteStatus(1);

/*
 * Deals
 */
// $deals = $ozla->deals();
// dump($deals);

// $deal = $ozla->createDeal([
//     'name' => 'Новая сделка',
//     'status_id' => 1,
//     'budget' => 20000,
//     'manager_id' => 1,
// ]);
// dump($deal);

// $deal = $ozla->deal(1);
// dump($deal);

// $deal = $ozla->updateDeal(1, [
//     'name' => 'Обновленная сделка',
// ]);
// dump($deal);

// $deal = $ozla->updateDealStatus(1, [
//     'status_id' => 3,
//     'priority' => 5,
// ]);
// dump($deal);

// $deal = $ozla->updateDealAuthor(1, [
//     'manager_id' => 11,
// ]);
// dump($deal);

// $ozla->deleteDeal(1);

/*
 * Deal comments
 */
// $comments = $ozla->comments(1);
// dump($comments);

// $comment = $ozla->createComment(1, [
//     'message' => 'Комментарий',
// ]);
// dump($comment);

// $comment = $ozla->comment(1, 1);
// dump($comment);

// $comment = $ozla->updateComment(1, 1, [
//     'message' => 'Обновленный комментарий',
// ]);
// dump($comment);

// $ozla->deleteComment(1, 1);

/*
 * Deal contragents
 */
// $contragents = $ozla->dealContragents(1);
// dump($contragents);

// $contragent = $ozla->attachDealContragent(1, [
//     'contragent_id' => 1,
// ]);
// dump($contragent);

// $ozla->detachDealContragent(1, 1);

/*
 * Deal members
 */
// $members = $ozla->dealMembers(1);
// dump($members);

// $member = $ozla->attachDealMember(1, [
//     'member_id' => 1,
// ]);
// dump($member);

// $ozla->detachDealMember(1, 1);
