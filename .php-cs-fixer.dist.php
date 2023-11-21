<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines https://www.simplemachines.org
 * @copyright 2023 Simple Machines and individual contributors
 * @license https://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 3.0 Alpha 1
 */

$finder = (new PhpCsFixer\Finder())
	->in(__DIR__ . '/Sources')
	// Don't touch libraries.
	->exclude([
		'minify',
		'random_compat',
		'ReCaptcha',
	])
	// Skip all index.php files.
	->notName('index.php')
	// Skip anything being ignored in .gitignore.
	->ignoreVCSIgnored(true);

return (new PhpCsFixer\Config())
	->setRules([
		'@PSR12' => true,
		'no_closing_tag' => false,
		'concat_space' => ['spacing' => 'one'],
		'array_syntax' => ['syntax' => 'short'],
		'ordered_imports' => [
			'imports_order' => [
				'class',
				'function',
				'const',
			],
			'sort_algorithm' => 'alpha',
		],
		'no_leading_namespace_whitespace' => true,
		'no_trailing_comma_in_singleline' => true,
		'normalize_index_brace' => true,
		'whitespace_after_comma_in_array' => true,
		'class_reference_name_casing' => true,
		'cast_spaces' => ['space' => 'single'],
		'single_line_comment_spacing' => true,
		'include' => true,
		'no_superfluous_elseif' => true,
		'no_useless_else' => true,
		'simplified_if_return' => true,
		'trailing_comma_in_multiline' => [
			'after_heredoc' => true,
			'elements' => [
				'arguments',
				'arrays',
				'match',
				'parameters',
			],
		],
		'lambda_not_used_import' => true,
		'nullable_type_declaration_for_default_null_value' => true,
		'nullable_type_declaration' => ['syntax' => 'question_mark'],
		'no_unused_imports' => true,
		'combine_consecutive_issets' => true,
		'combine_consecutive_unsets' => true,
		'operator_linebreak' => [
			'only_booleans' => true,
			'position' => 'beginning',
		],
		'standardize_not_equals' => true,
		'ternary_to_null_coalescing' => true,
		'phpdoc_indent' => true,
		'phpdoc_line_span' => [
			'const' => 'multi',
			'property' => 'multi',
			'method' => 'multi',
		],
		'phpdoc_no_access' => true,
		'phpdoc_no_useless_inheritdoc' => true,
		'phpdoc_order' => [
			'order' => [
				'param',
				'throws',
				'return',
			],
		],
		'phpdoc_no_empty_return' => true,
		'phpdoc_param_order' => true,
		'phpdoc_scalar' => [
			'types' => [
				'boolean',
				'callback',
				'double',
				'integer',
				'real',
				'str',
			],
		],
		'phpdoc_to_comment' => [
			'ignored_tags' => ['todo'],
		],
		'phpdoc_trim_consecutive_blank_line_separation' => true,
		'phpdoc_types' => [
			'groups' => ['alias', 'meta', 'simple'],
		],
		'phpdoc_var_without_name' => true,
		'no_useless_return' => true,
		'simplified_null_return' => true,
		'no_empty_statement' => true,
		'no_singleline_whitespace_before_semicolons' => true,
		'escape_implicit_backslashes' => [
			'double_quoted' => true,
			'heredoc_syntax' => true,
			'single_quoted' => true,
		],
		'explicit_string_variable' => true,
		'simple_to_complex_string_variable' => true,
		'single_quote' => true,
		'array_indentation' => true,
		'blank_line_before_statement' => [
			'statements' => [
				'case',
				'continue',
				'declare',
				'default',
				'do',
				'exit',
				'for',
				'foreach',
				'goto',
				'if',
				'include',
				'include_once',
				'require',
				'require_once',
				'return',
				'switch',
				'throw',
				'try',
				'while',
				'yield',
				'yield_from',
			],
		],
		'heredoc_indentation' => ['indentation' => 'start_plus_one'],
		'method_chaining_indentation' => true,
		'no_spaces_around_offset' => [
			'positions' => ['inside', 'outside'],
		],
		'type_declaration_spaces' => [
			'elements' => ['function', 'property'],
		],
	])
	->setIndent("\t")
	->setFinder($finder);

?>