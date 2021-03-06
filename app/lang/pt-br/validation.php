<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "O campo :attribute deve ser aceito.",
	"active_url"           => "O campo :attribute não é uma URL válida.",
	"after"                => "O campo :attribute deve ser uma data após :date.",
	"alpha"                => "O campo :attribute deve conter somente letras.",
	"alpha_dash"           => "O campo :attribute pode conter somente letras, números, e traços.",
	"alpha_num"            => "O campo :attribute pode conter somente letras e números.",
	"array"                => "O campo :attribute deve ser um array.",
	"before"               => "O campo :attribute deve ser uma data anterior a :date.",
	"between"              => array(
		"numeric" => "O campo :attribute deve estar entre :min e :max.",
		"file"    => "O campo :attribute deve estar entre :min e :max kilobytes.",
		"string"  => "O campo :attribute deve estar entre :min e :max caracteres.",
		"array"   => "O campo :attribute deve ter entre :min e :max itens.",
	),
	"boolean"              => "O campo :attribute deve ser verdadeiro ou falso.",
	"confirmed"            => "Campo :attribute com confirmação inválida.",
	"date"                 => "O campo :attribute não é uma data válida.",
	"date_format"          => "O campo :attribute não segue o formato :format.",
	"different"            => "Os campos :attribute e :other devem ser diferentes.",
	"digits"               => "O campo :attribute deve conter :digits dígitos.",
	"digits_between"       => "O campo :attribute deve ter entre :min e :max dígitos.",
	"email"                => "O campo :attribute deve ser um email válido.",
	"exists"               => "O campo selecionado :attribute é inválido.",
	"image"                => "O campo :attribute deve ser uma imagem.",
	"in"                   => "O campo selecionado :attribute é inválido.",
	"integer"              => "O campo :attribute deve ser um número inteiro.",
	"ip"                   => "O campo :attribute deve ser um endereço IP válido.",
	"max"                  => array(
		"numeric" => "O campo :attribute não pode ser maior que :max.",
		"file"    => "O campo :attribute não pode ser maior que :max kilobytes.",
		"string"  => "O campo :attribute não pode ser maior que :max caracteres.",
		"array"   => "O campo :attribute não pode conter mais de :max itens.",
	),
	"mimes"                => "O campo :attribute deve ser um arquivo do tipo: :values.",
	"min"                  => array(
		"numeric" => "O campo :attribute não pode ser menor que :min.",
		"file"    => "O campo :attribute não pode ser menor que :min kilobytes.",
		"string"  => "O campo :attribute deve conter pelo menos :min caracteres.",
		"array"   => "O campo :attribute deve conter pelo menos :min itens.",
	),
	"not_in"               => "O campo selecionado :attribute é inválido.",
	"numeric"              => "O campo :attribute deve ser um número.",
	"regex"                => "O campo :attribute está formatado incorretamente.",
	"required"             => "O campo :attribute é obrigatório.",
	"required_if"          => "O campo :attribute é obrigatório quando :other é :value.",
	"required_with"        => "O campo :attribute é obrigatório quando :values existe.",
	"required_with_all"    => "O campo :attribute é obrigatório quando :values existem.",
	"required_without"     => "O campo :attribute é obrigatório quando :values não existe.",
	"required_without_all" => "O campo :attribute é obrigatório quando nenhum dos campos :values existem.",
	"same"                 => "Os campos :attribute e :other devem ser iguais.",
	"size"                 => array(
		"numeric" => "O campo :attribute deve ser :size.",
		"file"    => "O campo :attribute deve ser :size kilobytes.",
		"string"  => "O campo :attribute deve ser :size caracteres.",
		"array"   => "O campo :attribute deve conter :size itens.",
	),
	"unique"               => "O valor no campo :attribute já está sendo utilizado por outro usuário.",
	"url"                  => "O campo :attribute está formatado incorretamente.",
	"timezone"             => "O campo :attribute deve ser uma zona válida.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
