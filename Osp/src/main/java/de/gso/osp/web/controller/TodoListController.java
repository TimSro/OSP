package de.gso.osp.web.controller;

import java.util.List;
import java.util.Vector;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import de.gso.osp.persistence.dao.TodoRepository;
import de.gso.osp.persistence.model.Benutzer;
import de.gso.osp.persistence.model.Fach;
import de.gso.osp.persistence.model.Klasse;
import de.gso.osp.persistence.model.Todo;
import de.gso.osp.service.BenutzerService;


@Controller
public class TodoListController {

	@Autowired
	TodoRepository todoRepository;
	
	@Autowired
    BenutzerService userService;
	
	@RequestMapping(value = "/todoListAll", method = RequestMethod.GET)
    public String getBenutzerTodoList(final Model model) {
		// FIXME Benutzer irgendwo her
		Benutzer benutzer = new Benutzer();
		List<Todo> todos = todoRepository.findByBenutzer(benutzer);
		List<String> todoStrings = new Vector<>();
		todos.stream()
			 .forEach(e -> todoStrings.add(e.getTodoString()));
		
        model.addAttribute("todosAll", todoStrings);
        return "todosAll";
    }
	
	@RequestMapping(value = "/todoList", method = RequestMethod.GET)
    public String getBenutzerDateTodoList(final Model model) {
		// FIXME Benutzer, Klasse, Fach irgendwo her
		Benutzer benutzer = new Benutzer();
		Klasse klasse = new Klasse();
		Fach fach = new Fach();
		List<Todo> todos = todoRepository.findByBenutzer(benutzer);
		List<String> todoStrings = new Vector<>();
		todos.stream()
			 .filter(e -> (e.getKlasse() == klasse && e.getFach() == fach))
			 .forEach(e -> todoStrings.add(e.getTodoString()));;
		
        model.addAttribute("todos", todoStrings);
        return "todos";
    }
}
