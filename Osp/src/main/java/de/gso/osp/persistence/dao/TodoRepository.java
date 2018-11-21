package de.gso.osp.persistence.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import de.gso.osp.persistence.model.Todo;

public interface TodoRepository  extends JpaRepository<Todo, Long> {
	Todo findByTodoKey(String todoKey);

	@Override
	void delete(Todo todo);
}
