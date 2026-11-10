# Pendientes — casafari-sdk

> **Estado:** hoja de ruta; NO equivale a funcionalidades implementadas.
>
> **Línea base estable:** `dmorenof/casafari-sdk` **v0.1.0** (SDK escrito a mano para el CRM API v1; no depende de `sdk-runtime` ni de `sdk-generator`).
>
> **Criterio de actualización:** `[x]` significa implementado y verificado con pruebas y CI; anotar la versión publicada.

## Leyenda

Igual en los tres repositorios:

- **P0:** bloqueante; **P1:** importante para producción; **P2:** avanzado; **P3:** adicional.
- **Parcial:** implementación limitada; la casilla sigue abierta.

## Orden global de trabajo (acordado 2026-11-10)

Idéntico en los tres repositorios.

1. **sdk-runtime:** cubrir lo necesario para servir a cualquier API y congelar su API pública (1.0).
2. **sdk-generator:** cumplir las especificaciones más importantes (Swagger 2.0, OpenAPI 3.0/3.1) sobre ese runtime.
3. **casafari-sdk:** evaluar y, si procede, migrar a un SDK generado.

Este repositorio no recibe cambios de migración hasta cerrar las fases 1 y 2. Mientras tanto solo se mantiene (correcciones y dependencias).

## 0. Línea base ya disponible

- [x] Cobertura completa del Casafari **CRM API v1** (`src/Core/v1.json`): Agency, Entity, Leads, CasafariGo, CodeTable y Property, con DTOs y colecciones tipadas.
- [x] Middlewares (`EchoMiddleware`, `LogMiddleware`) y pruebas con HTTP simulado (contrato Swagger, rutas y cobertura).
- [x] Licencia MIT, `NOTICE.md`, CI con matriz PHP, auditoría de dependencias y publicación automática por `VERSION` en Packagist.

## 1. Fase 3: evaluación y migración (tras las fases 1 y 2)

- [ ] **Aclarar el contrato:** este SDK cubre el CRM API v1; el SDK generado de la suite del generador cubre la API REST de `platform.casafari.com`. Decidir si ambos contratos se mantienen.
- [ ] Generar un SDK desde `src/Core/v1.json` con el generador estable y comparar su API pública con la actual (clases, métodos, DTOs, middlewares).
- [ ] Resolver el desajuste conocido de `PropertyListRequest::Locations` (colección frente a objeto único) documentado en el README.
- [ ] Decidir la estrategia: sustituir el código manual manteniendo compatibilidad (capa de adaptación o major nuevo) o mantener los dos paquetes.
- [ ] Probar operaciones representativas con credenciales reales y comparar respuestas con las del SDK actual. Requiere autorización del titular de las credenciales.
- [ ] Plan de rollback y guía de migración para consumidores de v0.1.x.
- [ ] Dependencia estable de `dmorenof/sdk-runtime` publicada en Packagist (sin ramas ni VCS temporales).

## 2. Mantenimiento mientras tanto

- [ ] Mantener verdes las comprobaciones `test` y `validate` y las actualizaciones de Dependabot.
- [ ] Ampliar pruebas del contrato actual solo si se detectan discrepancias con la API real.

## Historial de seguimiento

| Fecha | Cambio | Referencia |
| --- | --- | --- |
| 2026-11-10 | Se crea esta hoja de ruta con la leyenda común y el orden global runtime → generador → Casafari. | Conversación de planificación |
