# Pendientes — casafari-sdk

> **Estado (2026-11-23):** publicada la **0.6.0**: SDK generado desde la especificación OpenAPI 3.1 que Casafari publica en https://docs.api.casafari.com/openapi.json (API REST, 46 operaciones; OAuth2 client credentials y bearer). El CRM API v1 solo existe en la 0.5.x. `master` ya usa runtime ^1.11.1 y generador ^1.13.0 (sin publicar versión nueva: el código generado salía idéntico).
>
> **Qué es este fichero:** lo que **falta**. Lo hecho está en [CHANGELOG.md](CHANGELOG.md).

## Regla de publicación

Una versión se publica cuando el trabajo está **terminado y probado**, y solo cuando el titular lo confirma. No se suben versiones intermedias. Regenerar con una versión nueva del generador que deja `src/` idéntico no justifica una versión.

## Pendiente

- [ ] **Probar con la API real** (requiere credenciales y autorización del titular). Todas las pruebas usan HTTP simulado: nada se ha ejecutado contra `api.casafari.com`.
- [ ] **Decidir qué hacer con los consumidores de la 0.5.x** (CRM API v1): mantener esa línea con correcciones, o dejarla como está. La 0.6.0 no tiene ninguna operación en común con ella.
- [ ] **Guía de migración y plan de vuelta atrás** para quien venga de la 0.5.x o de la 0.1.x, si se decide darles continuidad.
- [x] **Regenerado** con el generador 1.14.0 y el runtime 1.12.0 (rama; CHANGELOG "Unreleased"). Falta: publicarlos antes, quitar el override temporal de `ci.yml` y el disparador temporal de `regenerate.yml`, y cambiar `VERSION` (eso publica).

## Mantenimiento

- [ ] Mantener verdes `test` y `validate` y las actualizaciones de Dependabot.
- [ ] Ampliar las pruebas solo si se detectan discrepancias con la API real.

## Historial de seguimiento

| Fecha | Cambio | Referencia |
| --- | --- | --- |
| 2026-11-10 | Se crea esta hoja de ruta con la leyenda común y el orden global runtime → generador → Casafari. | Conversación de planificación |
| 2026-11-23 | Se reescribe la hoja de ruta: el SDK ya se genera del contrato REST actual; se quita lo que hablaba del CRM v1 como línea base y las fases ya cumplidas. Se fija la regla de publicación. | Revisión de limpieza |

