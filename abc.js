const lexer = str => {
    return str.split(' ').map(item => {
        return item.trim()
    })
}

document.write(lexer('add 8 with 5'))

const parser = tokens => {

  let current_token_index = 0;

  const parseNumber = () => ({ value: parseInt(tokens[current_token_index++]), type: 'number' });

  const parseOperator = () => {
    const node = { value: tokens[current_token_index++], type: 'operator', expression: [] };
    while (tokens[current_token_index]) {
      node.expression.push(parseExpression());
    }
    return node;
  };

  const parseExpression = () => /\d/.test(tokens[current_token_index]) ? parseNumber() : parseOperator();

  return parseExpression();
};

document.write(parser(["add", "6", "with", "4"]))
